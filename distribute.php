<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$people = $_POST['people'] ?? null;

if (!is_numeric($people) || $people <= 0) {
    http_response_code(400);
    echo json_encode(['error' => 'Input value is invalid']);
    exit;
}

$people = (int) $people;
$suits = ['S', 'H', 'D', 'C'];
$cards = [];

foreach ($suits as $suit) {
    for ($i = 1; $i <= 13; $i++) {
        switch ($i) {
            case 1:
                $display = 'A';
                break;
            case 10:
                $display = 'X';
                break;
            case 11:
                $display = 'J';
                break;
            case 12:
                $display = 'Q';
                break;
            case 13:
                $display = 'K';
                break;
            default:
                $display = $i;
        }

        $cards[] = "$suit-$display";
    }
}

shuffle($cards);

$result = array_fill(0, $people, []);
foreach ($cards as $i => $card) {
    $index = $i % $people;
    $result[$index][] = $card;
}

echo json_encode($result);
