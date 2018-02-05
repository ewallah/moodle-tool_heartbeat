<?php

require_once __DIR__ . '/../classes/loginchecker.php';

class tool_loginchecker_loginchecker_test extends advanced_testcase
{

    public function test_log_counting()
    {
        $data1 = new stdClass();
        $data1->logincount = 15;
        $data1->origin = 'web';
        $data1->ip = '127.0.0.1';

        $data2 = new stdClass();
        $data2->logincount = 47;
        $data2->origin = 'web';
        $data2->ip = '127.0.0.1';

        $data3 = new stdClass();
        $data3->logincount = 8;
        $data3->origin = 'web';
        $data3->ip = '127.0.0.1';

        $data4 = new stdClass();
        $data4->logincount = 62;
        $data4->origin = 'web';
        $data4->ip = '127.0.0.1';

        $data5 = new stdClass();
        $data5->logincount = 87;
        $data5->origin = 'web';
        $data5->ip = '127.0.0.1';

        $data6 = new stdClass();
        $data6->logincount = 19;
        $data6->origin = 'web';
        $data6->ip = '127.0.0.1';

        $data7 = new stdClass();
        $data7->logincount = 3;
        $data7->origin = 'web';
        $data7->ip = '127.0.0.1';

        $data8 = new stdClass();
        $data8->logincount = 14;
        $data8->origin = 'web';
        $data8->ip = '127.0.0.1';

        $data9 = new stdClass();
        $data9->logincount = 21;
        $data9->origin = 'web';
        $data9->ip = '127.0.0.1';

        $dataset = array(
            1 => $data1,
            2 => $data2,
            3 => $data3,
            4 => $data4,
            5 => $data5,
            6 => $data6,
            7 => $data7,
            8 => $data8,
            9 => $data9,
        );

        $finalcount = loginchecker::parse_log_data($dataset);

        $this->assertEquals(276, $finalcount);
    }

    public function test_error_output()
    {

    }
}