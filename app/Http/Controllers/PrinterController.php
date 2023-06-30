<?php

namespace App\Http\Controllers;

use Rawilk\Printing\Facades\Printing;

class PrinterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $printerId = '72112713';
        // List all printers
        $printers = Printing::printers();
        foreach ($printers as $printer) {
            echo '印表機編號：' . $printer->id() . PHP_EOL;
            echo '印表機名稱：' . $printer->name() . PHP_EOL;
            echo '印表機狀態：' . $printer->status() . PHP_EOL;
            echo PHP_EOL;
        }
        $printJob = Printing::newPrintTask()
                    ->printer($printerId)
                    ->file(storage_path('data/covid-19-vaccine-research-findings.pdf'))
                    ->send();
        echo '印表機伺服器工作回傳編號數字：' . $printJob->id() . PHP_EOL;
    }
}
