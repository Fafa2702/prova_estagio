<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    http_response_code(405);
    echo json_encode(["erro" => "Só é permitido o método GET"]);
    exit;
}


    $emprestimos = [
        [
            'id' => 1,
            'valor_emprestimo' => 1200,
            'numero_parcelas' => 12,
            'taxa_juros' => 0.05,
            'valor_parcela' => 888.49,
            'total_pago' => 10661.88,
            'total_juros' => 661.88,
        ],
        [
            'id' => 2,
            'valor_emprestimo' => 5000,
            'numero_parcelas' => 6,
            'taxa_juros' => 0.03,
            'valor_parcela' => 860.83,
            'total_pago' => 5164.98,
            'total_juros' => 164.98,
        ],
        [
            'id' => 3,
            'valor_emprestimo' => 15000,
            'numero_parcelas' => 18,
            'taxa_juros' => 0.07,
            'valor_parcela' => 978.23,
            'total_pago' => 17608.14,
            'total_juros' => 2608.14,
        ],
        [
            'id' => 4,
            'valor_emprestimo' => 20000,
            'numero_parcelas' => 24,
            'taxa_juros' => 0.08,
            'valor_parcela' => 1040.59,
            'total_pago' => 24974.16,
            'total_juros' => 4974.16,
        ],
        [
            'id' => 5,
            'valor_emprestimo' => 10000,
            'numero_parcelas' => 12,
            'taxa_juros' => 0.05,  
            'valor_parcela' => 898.75,
            'total_pago' => 10785.00,
            'total_juros' => 1785.00,
        ]
];
echo json_encode($emprestimos);




?>

