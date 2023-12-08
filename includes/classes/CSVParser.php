<?php

class CSVParser {
    private $csvFile;
    private $columns;

    public function __construct($csvFile, $columns) {
        $this->csvFile = $csvFile;
        $this->columns = $columns;
    }

    public function parseCSV() {
        $data = [];
        $file = fopen($this->csvFile, 'r');
        if ($file !== false) {
            $header = fgetcsv($file); // Get the header row
            $columnIndices = array_map(function($column) use ($header) {
                return array_search($column, $header);
            }, $this->columns);
            while (($row = fgetcsv($file)) !== false) {
                $rowData = [];
                foreach ($columnIndices as $index) {
                    $rowData[$this->columns[$index]] = $row[$index];
                }
                $data[] = $rowData;
            }
            fclose($file);
        }
        return $data;
    }
}


