<?php

namespace Symfony\Component\HttpKernel\Tests\Exception;

use Symfony\Component\HttpKernel\Exception\GoneHttpException;

/**
 * Test the GoneHttpException class.
 */
class GoneHttpExceptionTest extends HttpExceptionTest
{
    /**
     * Test that the default headers is an empty array.
     */
    public function testHeadersDefault()
    {
        $exception = new GoneHttpException();
        $this->assertSame(array(), $exception->getHeaders());
    }

    /**
     * Test that setting the headers using the setter function
     * is working as expected.
     *
     * @param array $headers The headers to set.
     *
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new GoneHttpException();
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }
}