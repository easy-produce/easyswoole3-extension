<?php

namespace Es3\Utility;

class Excel
{
    static function xlswriterMapping(string $filePath, array $mapping, int $skipRows = null, string $sheetName = null, array $xlswriterConfig = []): array
    {
        // 打开文件
        $xlswriterConfig['path'] = '/';
        $excel = new \Vtiful\Kernel\Excel($xlswriterConfig);
        $sheetList = $excel->openFile($filePath)->sheetList();

        /** 获取 sheet */
        $sheetName = superEmpty($sheetName) ? current((array)$sheetList) : $sheetName;
        $excel->openFile($filePath)->openSheet($sheetName);

        /** 获取结果 */
        $results = [];
        $cellReadType = [];
        array_walk($mapping, function ($value) use(&$cellReadType){$cellReadType[] = $value['type'] ?? \Vtiful\Kernel\Excel::TYPE_STRING;});
        $skipRows ? $excel->setSkipRows($skipRows) : null;
        for (; ($rowData = $excel->nextRow($cellReadType)) !== NULL;) {

            /** 如果正常是空的 就过滤掉 */
            if (empty(array_filter($rowData))) {
                continue;
            }

            $tmp = [];
            foreach ($mapping as $column => $key) {
                $key = $key['column'] ?? $key;
                $column = \Vtiful\Kernel\Excel::columnIndexFromString($column);
                $tmp[$key] = $rowData[$column] ?? null;
            }

            $results[] = $tmp;
        }

        return $results;
    }
}