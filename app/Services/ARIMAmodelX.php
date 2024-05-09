<?php

namespace App\Services;

use Phpml\Math\Matrix;
use Phpml\Math\Statistic\Mean;
use Phpml\Math\Statistic\StandardDeviation;

class ARIMAModel
{
    public function predict(array $data, int $p, int $d, int $q, int $future_steps = 1)
    {
        $result = [];
        $len = count($data);

        // Differencing
        for ($i = $d; $i < $len; $i++) {
            $data[$i] -= $data[$i - $d];
        }

        for ($i = 0; $i < $future_steps; $i++) {
            $result[] = $this->arima($data, $p, $d, $q);
            $data[] = end($result);
        }

        return $result;
    }

    private function arima(array $data, int $p, int $d, int $q)
    {
        $len = count($data);

        // Auto Regressive (AR) Part
        $ar = [];
        for ($i = $p; $i < $len; $i++) {
            $ar[] = $data[$i] - $data[$i - $p];
        }

        // Moving Average (MA) Part
        $ma = [];
        for ($i = 0; $i < $len - $q; $i++) {
            $ma[] = $data[$i] - $data[$i + $q];
        }

        // Combine AR and MA
        $diff = [];
        $max_len = max(count($ar), count($ma));
        for ($i = 0; $i < $max_len; $i++) {
            $ar_val = $i < count($ar) ? $ar[$i] : 0;
            $ma_val = $i < count($ma) ? $ma[$i] : 0;
            $diff[] = $ar_val + $ma_val;
        }

        // Undifferencing
        $last_values = array_slice($data, -$d);
        $undiff = array_merge($last_values, $diff);

        // Forecast
        return $this->mean($undiff);
    }

    private function mean(array $data)
    {
        return array_sum($data) / count($data);
    }
}
