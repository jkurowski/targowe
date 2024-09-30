<?php

if (! function_exists('window')) {
    function window(int $number): ?string
    {
        $directions = [
            1 => 'Północ',
            2 => 'Południe',
            3 => 'Wschód',
            4 => 'Zachód',
            5 => 'Północny wschód',
            6 => 'Północny zachód',
            7 => 'Południowy wschód',
            8 => 'Południowy zachód',
            9 => 'Wschód, Północ',
            10 => 'Wschód, Południe',
            11 => 'Zachód, Północ',
            12 => 'Zachód, Południe'
        ];

        return $directions[$number] ?? null;
    }
}