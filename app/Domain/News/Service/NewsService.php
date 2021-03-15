<?php

declare(strict_types=1);

namespace App\Domain\News\Service;

use App\Domain\News\DTO\NewsDto;
use App\Services\AbstractService;
use Laravel\Lumen\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class NewsService
 * @package App\Services\News
 */
class NewsService extends AbstractService
{
    /**
     * @param int $authorId
     * @param int $limit
     * @param array $orderBy
     * @return array
     */
    public function findByAuthor(int $authorId, int $limit = 10, $orderBy = []): array
    {
        return $this->repository->findByAuthor($authorId, $limit, $orderBy);
    }

    /**
     * @param string $param
     * @return array
     */
    public function findBy(string $param): array
    {
        return $this->repository->findBy($param);
    }

    /**
     * @param string $param
     * @return bool
     */
    public function deleteBy(string $param): bool
    {
        return $this->repository->deleteBy($param);
    }

    /**
     * @param int $authorId
     * @return bool
     */
    public function deleteByAuthor(int $authorId): bool
    {
        return $this->repository->deleteByAuthor($authorId);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function dto(Request $request): array
    {
        return NewsDto::fromRequest($request)->toArray();
    }
}
