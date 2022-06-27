<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\IctForms;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\Users;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function create()
    {
        switch (request()->action) {
            case 'users':
                dd(request(), request()->export);

                switch (request()->export) {
                    case 'admin-all-customer':
                        break;
                    case 'admin-all-user':
                        break;
                }

                // Create a new spreadsheet
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();

                // set cell value
                $sheet->setCellValue('A1', 'Hello World !');

                //  Set active sheet index to the first sheet, so Excel opens this as the first sheet
                $spreadsheet->setActiveSheetIndex(0);

                // save file
                $writer = new Xlsx($spreadsheet);

                // force download
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename="dost_users-report.xlsx"');
                header('Cache-Control: max-age=0');

                $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
                $writer->save('php://output');

                $spreadsheet->disconnectWorksheets();
                unset($spreadsheet);

                break;
            case 'requests':
                switch (request()->export) {
                    case 'admin-all':
                        $excelSheet = ['Repair', 'Pre-repair', 'Post Repair', 'ICT'];
                        $this->setDataExcel($excelSheet, 'admin', request());

                        break;
                    case 'admin-repair':
                        $excelSheet = ['Repair', 'Pre-repair', 'Post Repair'];
                        $this->setDataExcel($excelSheet, 'admin', request());

                        break;
                    case 'admin-ict':
                        $excelSheet = ['ICT'];
                        $this->setDataExcel($excelSheet, 'admin', request());

                        break;

                        // user request
                    case 'user-repair':
                        $excelSheet = ['Repair', 'Pre-repair', 'Post Repair'];
                        $this->setDataExcel($excelSheet, 'user', request());

                        break;
                    case 'user-ict':
                        $excelSheet = ['ICT'];
                        $this->setDataExcel($excelSheet, 'user', request());

                        break;
                    case 'user-all':
                        $excelSheet = ['Repair', 'Pre-repair', 'Post Repair', 'ICT'];
                        $this->setDataExcel($excelSheet, 'user', request());

                        break;
                }
                break;
        }
    }

    public function setDataExcel(array $excelSheet, string $type, $request)
    {
        $spreadsheet = new Spreadsheet();
        for ($x = 0; $x < sizeof($excelSheet); $x++) {
            $e = 2; // Row start at 2
            $y = 1;
            if ($excelSheet[$x] == 'Repair') {
                $sheet = $spreadsheet->getActiveSheet();
                //Excel Heading
                if ($y == 1) {
                    $sheet->setCellValue('A1', 'ID');
                    $sheet->setCellValue('B1', 'DATE REQUESTED');
                    $sheet->setCellValue('C1', 'REQUEST NO');
                    $sheet->setCellValue('D1', 'DESCRIPTION OF PROPERTY TYPE');
                    $sheet->setCellValue('E1', 'LOCATION');
                    $sheet->setCellValue('F1', 'ACQUISITION DATE');
                    $sheet->setCellValue('G1', 'ACQUISITION COST');
                    $sheet->setCellValue('H1', 'PROBLEM ENCOUNTERED');
                    $sheet->setCellValue('I1', 'CORRECTIVE ACTION PERFORMED');
                    $sheet->setCellValue('J1', 'USER ID');
                    $sheet->setCellValue('K1', 'EQUIPMENT ID');
                    $sheet->setCellValue('L1', 'STATUS');

                    $y = 0;
                }
                // Excel Data
                if ($type == 'admin') {
                    $data = RepairRequest::all();
                } elseif ($type == 'user') {
                    $data = Users::findOrFail(auth()->user()->id)->repairrequest;
                }

                if (!empty($data)) {
                    foreach ($data as $item) {
                        $sheet->setCellValue('A' . $e, $item->id);
                        $sheet->setCellValue('B' . $e, $item->date_requested);
                        $sheet->setCellValue('C' . $e, $item->request_no);
                        $sheet->setCellValue('D' . $e, $item->description_of_property_type);
                        $sheet->setCellValue('E' . $e, $item->location);
                        $sheet->setCellValue('F' . $e, $item->acquisition_date);
                        $sheet->setCellValue('G' . $e, $item->acquisition_cost);
                        $sheet->setCellValue('H' . $e, $item->problem_encountered);
                        $sheet->setCellValue('I' . $e, $item->corrective_action_performed);
                        $sheet->setCellValue('J' . $e, $item->users_id);
                        $sheet->setCellValue('K' . $e, $item->equipment_id);
                        $sheet->setCellValue('L' . $e, $item->status);

                        $e++;
                    }
                }
            } elseif ($excelSheet[$x] == 'Pre-repair') {
                $sheet = $spreadsheet->createSheet();

                //Excel Heading
                if ($y == 1) {
                    $sheet->setCellValue('A1', 'ID');
                    $sheet->setCellValue('B1', 'DEFECTS/COMPLAINTS');
                    $sheet->setCellValue('C1', 'PRE-REPAIR ASSESSMENT NATURE');
                    $sheet->setCellValue('D1', 'DATE OF LATEST REPAIR');
                    $sheet->setCellValue('E1', 'MATURE OF LATEST REPAIR');
                    $sheet->setCellValue('F1', 'REPAIR REQUEST ID');
                    $sheet->setCellValue('G1', 'STATUS');

                    $y = 0;
                }
                // Excel Data
                if ($type == 'admin') {
                    $data = PreRepairInspections::all();

                    if (!empty($data)) {
                        foreach ($data as $item) {
                            $sheet->setCellValue('A' . $e, $item->id);
                            $sheet->setCellValue('B' . $e, $item->detail_of_defects);
                            $sheet->setCellValue('C' . $e, $item->pre_repair_assessment_done);
                            $sheet->setCellValue('D' . $e, $item->date_of_latest_repair);
                            $sheet->setCellValue('E' . $e, $item->mature_of_latest_repair);
                            $sheet->setCellValue('F' . $e, $item->repair_requests_id);
                            $sheet->setCellValue('G' . $e, $item->status);
                            $e++;
                        }
                    }
                } elseif ($type == 'user') {
                    $data = Users::findOrFail(auth()->user()->id)->repairrequest;

                    if (!empty($data)) {
                        foreach ($data as $key) {
                            if ($key->prerepairinspections != null) {
                                $sheet->setCellValue('A' . $e, $key->prerepairinspections->id);
                                $sheet->setCellValue('B' . $e, $key->prerepairinspections->detail_of_defects);
                                $sheet->setCellValue('C' . $e, $key->prerepairinspections->pre_repair_assessment_done);
                                $sheet->setCellValue('D' . $e, $key->prerepairinspections->date_of_latest_repair);
                                $sheet->setCellValue('E' . $e, $key->prerepairinspections->mature_of_latest_repair);
                                $sheet->setCellValue('F' . $e, $key->prerepairinspections->repair_requests_id);
                                $sheet->setCellValue('G' . $e, $key->prerepairinspections->status);
                                $e++;
                            }
                        }
                    }
                }
                // dd($data);
            } elseif ($excelSheet[$x] == 'Post Repair') {
                $sheet = $spreadsheet->createSheet();

                //Excel Heading
                if ($y == 1) {
                    $sheet->setCellValue('A1', 'ID');
                    $sheet->setCellValue('B1', 'REPAIR SHOP');
                    $sheet->setCellValue('C1', 'REPAIR SHOP DATE');
                    $sheet->setCellValue('D1', 'INVOICE NO');
                    $sheet->setCellValue('E1', 'JOB ORDER NO');
                    $sheet->setCellValue('F1', 'JOB ORDER DATE');
                    $sheet->setCellValue('G1', 'AMT/J.O/P.O NO');
                    $sheet->setCellValue('H1', 'PAYABLE ACCOUNT');
                    $sheet->setCellValue('I1', 'RECOMMENDATION');
                    $sheet->setCellValue('J1', 'PRE-REPAIR INSPECTION ID');
                    $sheet->setCellValue('K1', 'STATUS');

                    $y = 0;
                }
                // Excel Data
                if ($type == 'admin') {
                    $data = PostRepairInspections::all();

                    if (!empty($data)) {
                        foreach ($data as $item) {
                            $sheet->setCellValue('A' . $e, $item->id);
                            $sheet->setCellValue('B' . $e, $item->repair_shop);
                            $sheet->setCellValue('C' . $e, $item->repair_shop_date);
                            $sheet->setCellValue('D' . $e, $item->invoice_no);
                            $sheet->setCellValue('E' . $e, $item->job_order_no);
                            $sheet->setCellValue('F' . $e, $item->job_order_date);
                            $sheet->setCellValue('G' . $e, $item->amt_no);
                            $sheet->setCellValue('H' . $e, $item->payable_account);
                            $sheet->setCellValue('I' . $e, $item->recommendation);
                            $sheet->setCellValue('J' . $e, $item->pre_repair_inspections_id);
                            $sheet->setCellValue('K' . $e, $item->status);
                            $e++;
                        }
                    }
                } elseif ($type == 'user') {
                    $data = Users::findOrFail(auth()->user()->id)->repairrequest;

                    if (!empty($data)) {
                        foreach ($data as $key) {
                            if ($key->prerepairinspections != null) {
                                if ($key->prerepairinspections->postrepairinspections != null) {
                                    $sheet->setCellValue('A' . $e, $key->prerepairinspections->postrepairinspections->id);
                                    $sheet->setCellValue('B' . $e, $key->prerepairinspections->postrepairinspections->repair_shop);
                                    $sheet->setCellValue('C' . $e, $key->prerepairinspections->postrepairinspections->repair_shop_date);
                                    $sheet->setCellValue('D' . $e, $key->prerepairinspections->postrepairinspections->invoice_no);
                                    $sheet->setCellValue('E' . $e, $key->prerepairinspections->postrepairinspections->job_order_no);
                                    $sheet->setCellValue('F' . $e, $key->prerepairinspections->postrepairinspections->job_order_date);
                                    $sheet->setCellValue('G' . $e, $key->prerepairinspections->postrepairinspections->amt_no);
                                    $sheet->setCellValue('H' . $e, $key->prerepairinspections->postrepairinspections->payable_account);
                                    $sheet->setCellValue('I' . $e, $key->prerepairinspections->postrepairinspections->recommendation);
                                    $sheet->setCellValue('J' . $e, $key->prerepairinspections->postrepairinspections->pre_repair_inspections_id);
                                    $sheet->setCellValue('K' . $e, $key->prerepairinspections->postrepairinspections->status);
                                    $e++;
                                }
                            }
                        }
                    }
                }
            } elseif ($excelSheet[$x] == 'ICT') {
                if ($request->export == 'user-ict'){
                    $sheet = $spreadsheet->getActiveSheet();
                }
                else{
                    $sheet = $spreadsheet->createSheet();
                }
                //Excel Heading
                if ($y == 1) {
                    $sheet->setCellValue('A1', 'ID');
                    $sheet->setCellValue('B1', 'DATE REQUESTED');
                    $sheet->setCellValue('C1', 'REQUEST NO');
                    $sheet->setCellValue('D1', 'USER ID');
                    $sheet->setCellValue('E1', 'EQUIPMENT PROPERTY NO');
                    $sheet->setCellValue('F1', 'STATUS');
                    $sheet->setCellValue('G1', 'TYPE OF REQUEST');
                    $sheet->setCellValue('H1', '(TYPE OF REQUEST) OTHER HAS_DESCRIPTION');

                    $y = 2;
                }
                // Excel Data
                if ($type == 'admin') {
                    $data = IctForms::all();
                } elseif ($type == 'user') {
                    $data = Users::findOrFail(auth()->user()->id)->ictforms;
                }

                if (!empty($data)) {
                    $e = 2; // Row start at 2
                    foreach ($data as $item) {
                        $sheet->setCellValue('A' . $e, $item->id);
                        $sheet->setCellValue('B' . $e, $item->date_requested);
                        $sheet->setCellValue('C' . $e, $item->request_no);
                        $sheet->setCellValue('D' . $e, $item->users_id);
                        $sheet->setCellValue('E' . $e, $item->equipment->property_no);
                        $sheet->setCellValue('F' . $e, $item->status);
                        $sheet->setCellValue('G' . $e, $item->type_of_requests->request_title);
                        $sheet->setCellValue('H' . $e, $item->type_request_description);
                        $e++;
                    }
                }

                //Excel Heading
                if ($y == 2) {
                    $sheet = $spreadsheet->createSheet();
                    $sheet->setCellValue('A1', 'ID');
                    $sheet->setCellValue('B1', 'ICT REQUEST ID');
                    $sheet->setCellValue('C1', 'AREA OF REQUEST');
                    $sheet->setCellValue('D1', '(AREA OF REQUEST) DESCRIPTION');

                    $y = 0;
                }

                // Excel Data
                $data = IctForms::all();
                if (!empty($data)) {
                    $e = 2; // Row start at 2
                    foreach ($data as $item) {
                        foreach ($item->arearequests as $areaItem) {
                            $sheet->setCellValue('A' . $e, $areaItem->id);
                            $sheet->setCellValue('B' . $e, $areaItem->ict_forms_id);
                            $sheet->setCellValue('C' . $e, $areaItem->area_of_requests->request_title);
                            $sheet->setCellValue('D' . $e, $areaItem->has_description);
                            $e++;
                        }
                    }
                }
            }
        }


        $sheet = $spreadsheet->createSheet();
        //Excel Heading
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'SERIAL NO');
        $sheet->setCellValue('C1', 'PROPERTY NO');
        $sheet->setCellValue('D1', 'BRAND/MODEL');

        if ($type == 'admin') {
            // Excel Data
            $data = Equipment::all();

            if (!empty($data)) {
                $e = 2; // Row start at 2
                foreach ($data as $item) {
                    $sheet->setCellValue('A' . $e, $item->id);
                    $sheet->setCellValue('B' . $e, $item->serial_no);
                    $sheet->setCellValue('C' . $e, $item->property_no);
                    $sheet->setCellValue('D' . $e, $item->brand_model);
                    $e++;
                }
            }
        } elseif ($type == 'user') {
            $data = Users::findOrFail(auth()->user()->id);
            $e = 2; // Row start at 2
            // dd($data->repairrequest);
            if (!empty($data->repairrequest) && !empty($data->ictforms)) {
                foreach ($data->repairrequest as $reqst) {
                    $sheet->setCellValue('A' . $e, $reqst->equipment->id);
                    $sheet->setCellValue('B' . $e, $reqst->equipment->serial_no);
                    $sheet->setCellValue('C' . $e, $reqst->equipment->property_no);
                    $sheet->setCellValue('D' . $e, $reqst->equipment->brand_model);
                    $e++;
                }
                foreach ($data->ictforms as $reqst) {
                    $sheet->setCellValue('A' . $e, $reqst->equipment->id);
                    $sheet->setCellValue('B' . $e, $reqst->equipment->serial_no);
                    $sheet->setCellValue('C' . $e, $reqst->equipment->property_no);
                    $sheet->setCellValue('D' . $e, $reqst->equipment->brand_model);
                    $e++;
                }
            }
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="dost_users-report.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');

        $spreadsheet->disconnectWorksheets();
        unset($spreadsheet);
    }
}
