<?

$exchangeRates = fopen('data/exchangeRates.json', 'w');

fwrite($exchangeRates, json_encode(simplexml_load_file('data/exchangeRates.xml')));
fclose($exchangeRates);

readfile('public/index.html');