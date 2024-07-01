<?php

class VisualizationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function load($type = 'bar')
    {
        $options = [];
        $options['chart'] = [
            'type' => $type,
            'sparkline' => [
                'enabled' => !0
            ]
        ];
        switch ($type) {
            case 'line':
                $options['stroke'] = [
                    'width' => 2,
                    'curve' => 'smooth',
                ];
                $options['markers'] = [
                    'size' => 0
                ];
                $options['series'] = [
                    [
                        'name' => '',
                        'data' => [41, 45, 44, 46, 52, 54, 43, 74, 82, 82, 89]
                    ]
                ];
                $options['xaxis'] = [
                    'type' => 'datetime',
                    'categories' => ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022",]
                ];
                break;

            default:
                $options['plotOptions'] = [
                    'bar' => [
                        'borderRadius' => 2,
                        'columnWidth' => "60%"
                    ]
                ];
                $options['series'] = [
                    [
                        'name' => '',
                        'data' => [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63]
                    ]
                ];
                $options['xaxis'] = [
                    'type' => 'datetime',
                    'categories' => ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022",]
                ];
                break;
        }

        return json_encode($options);
    }
}
