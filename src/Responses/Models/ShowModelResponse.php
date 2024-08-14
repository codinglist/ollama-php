<?php

namespace ArdaGnsrn\Ollama\Responses\Models;

use ArdaGnsrn\Ollama\Contracts\ResponseContract;

class ShowModelResponse implements ResponseContract
{
    private function __construct(
        public readonly string $modelfile,
        public readonly string $parameters,
        public readonly string $template,
        public readonly ListModelsModelDetailsResponse $details,
        public readonly array $modelInfo = [],
    )
    {
    }

    public static function from(array $attributes): ShowModelResponse
    {
        return new self(
            modelfile: $attributes['modelfile'],
            parameters: $attributes['parameters'],
            template: $attributes['template'],
            details: ListModelsModelDetailsResponse::from($attributes['details']),
            modelInfo: $attributes['model_info'],
        );
    }

    public function toArray(): array
    {
        return [
            'modelfile' => $this->modelfile,
            'parameters' => $this->parameters,
            'template' => $this->template,
            'details' => $this->details->toArray(),
            'model_info' => $this->modelInfo,
        ];
    }
}