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
        $printerId = '73166646';
        // List all printers
        $printers = Printing::printers();
        foreach ($printers as $printer) {
            echo __('Printer ID:') . $printer->id() . PHP_EOL;
            echo __('Printer Name:') . $printer->name() . PHP_EOL;
            echo __('Printer Status:') . $printer->status() . PHP_EOL;
            echo PHP_EOL;
        }
        $printJob = Printing::newPrintTask()
                    ->printer($printerId)
                    ->file(storage_path('data/sudan-red-measures.pdf'))
                    ->send();
        echo __('Print job id:') . $printJob->id() . PHP_EOL;
    }
}
