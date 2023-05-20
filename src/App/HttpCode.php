<?php

declare(strict_types=1);

namespace App;

enum HttpCode: int {
    case NOT_FOUND_404 = 404;
    case BAD_REQUEST_400 = 400;
    case INTERNAL_SERVER_ERROR_500 = 500;
}