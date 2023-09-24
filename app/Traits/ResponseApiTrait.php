<?php

namespace App\Traits;

use App\Exceptions\CustomValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ResponseApiTrait
{
    /**
     * Throw validation exception.
     *
     * @param  string  $key
     *
     * @throws CustomValidationException
     */
    public function throwValidationException(string $message): void
    {
        throw CustomValidationException::make($message);
    }

    /**
     * Response with resource.
     *
     * @param  mixed  $resource
     */
    public function responseResource(object $resource, array $additional = null, int $status = 200): mixed
    {
        if ($additional) {
            $resource->additional($additional);
        }

        return $resource->response()
            ->setStatusCode($status);
    }

    /**
     * Response with normal json array.
     *
     * @param  array  $data
     */
    public function responseData(array $data = null, int $status = 200): JsonResponse
    {
        return response()->json($data, $status);
    }

    /**
     * Response with success.
     */
    public function success(): JsonResponse
    {
        return response()->json(['message' => __('messages.success')], 200);
    }

    public function error($message, $status = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json(compact('message'), $status);
    }
}
