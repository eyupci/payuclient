<?php
namespace Payu\Parser;

use Payu\Exception\BadResponseError;
use Payu\Response\TokenResponse;
use Payu\Response\ResponseAbstract;
use \Exception;

class TokenResponseParser implements ParserInterface
{
    /**
     * @param string $rawData
     * @return TokenResponse|ResponseAbstract
     * @throws \Payu\Exception\BadResponseError
     */
    public function parse($rawData)
    {
        try {
            $responseJson = json_decode($rawData);
        } catch(Exception $e) {
            throw new BadResponseError('Unexpected response received from provider. Response: ' . $rawData);
        }
        $code = $responseJson->code;
        $statusCode = $code > 0 ? ResponseAbstract::STATUS_DECLINED : ResponseAbstract::STATUS_APPROVED;
        $message = $responseJson->message;
        $transactionId = $code == 0 && isset($responseJson->tran_ref_no) ? $responseJson->tran_ref_no : null;
        return new TokenResponse($statusCode, $code, $message, $transactionId);
    }
}
