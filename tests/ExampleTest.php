<?php

it('can test', function () {
    $client = \ArdaGnsrn\Ollama\Ollama::client();

//    $response = $client->completions()->create([
//        'model' => 'llama3.1',
//        'prompt' => 'Once upon a time',
//    ]);
//
//    print_r("--------------------\n");
//    print_r($response);
//    print_r("--------------------\n");

//    $response = $client->completions()
//        ->createStreamed([
//            'model' => 'llama3.1',
//            'prompt' => 'Once upon a time',
//        ]);
//    print_r("--------------------\n");
//    foreach ($response as $item) {
//        print_r($item->response);
//    }
//    print_r("--------------------\n");

//    $response = $client->chat()
//        ->create([
//            'model' => 'llama3.1',
//            'messages' => [
//                ['role' => 'user', 'content' => 'What is the weather today in Paris?'],
//            ],
//            'tools' => [
//                [
//                    'type' => 'function',
//                    'function' => [
//                        'name' => 'get_current_weather',
//                        'description' => 'Get the current weather',
//                        'parameters' => [
//                            'type' => 'object',
//                            'properties' => [
//                                'location' => [
//                                    'type' => 'string',
//                                    'description' => 'The location to get the weather for, e.g. San Francisco, CA',
//                                ],
//                                'format' => [
//                                    'type' => 'string',
//                                    'description' => 'The location to get the weather for, e.g. San Francisco, CA',
//                                    'enum' => ['celsius', 'fahrenheit']
//                                ],
//                            ],
//                            'required' => ['location', 'format'],
//                        ],
//                    ],
//                ]
//            ]
//        ]);
//
//    print_r("--------------------\n");
//    print_r($response->toArray());
//    print_r("--------------------\n");

//    $response = $client->chat()
//        ->createStreamed([
//            'model' => 'llama3.1',
//            'messages' => [
//                ['role' => 'system', 'content' => 'You are a chatbot.'],
//                ['role' => 'user', 'content' => 'Hello!'],
//            ],
//        ]);
//
//    print_r("--------------------\n");
//    foreach ($response as $item) {
//        print_r($item->message->content);
//    }
//    print_r("--------------------\n");

//    $response = $client->models()->createStreamed([
//        'name' => 'mario',
//        'modelfile' => "FROM llama3.1\nSYSTEM You are mario from Super Mario Bros."
//    ]);
//
//    print_r("--------------------\n");
//    foreach ($response as $item) {
//        print_r($item->status . " \n");
//    }
//    print_r("--------------------\n");

    $response = $client->models()->create([
        'name' => 'mario',
        'modelfile' => "FROM llama3.1\nSYSTEM You are mario from Super Mario Bros."
    ]);

    print_r("--------------------\n");
    print_r($response->toArray());
    print_r("--------------------\n");
});
