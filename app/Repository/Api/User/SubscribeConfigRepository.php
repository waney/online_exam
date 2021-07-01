<?php
declare(strict_types=1);

namespace App\Repository\Api\User;


use App\Models\Api\User\WeChatSubscribeConfig;
use App\Repository\Api\ApiRepositoryInterface;

/**
 * 微信订阅消息配置
 *
 * Class SubscribeConfigRepository
 * @package App\Repository\Api\User
 */
class SubscribeConfigRepository implements ApiRepositoryInterface
{
    private $configModel;

    public function __construct()
    {
        $this->configModel = new WeChatSubscribeConfig;
    }

    /**
     * 查询数据
     *
     * @param \Closure $closure
     * @param int $perSize 分页大小
     * @return array
     */
    public function repositorySelect(\Closure $closure, int $perSize): array
    {
        $items = $this->configModel::query()->where($closure)->orderByDesc('orders')->paginate((int)$perSize);

        return [
            'items' => $items->items(),
            'page'  => $items->currentPage(),
            'size'  => $items->perPage(),
            'total' => $items->total(),
        ];
    }

    /**
     * 创建数据
     *
     * @param array $insertInfo 创建信息
     * @return boolean true|false
     */
    public function repositoryCreate(array $insertInfo): bool
    {
        // TODO: Implement repositoryCreate() method.
    }

    /**
     * 添加数据
     *
     * @param array $addInfo 添加信息
     * @return int 添加之后的ID或者行数
     */
    public function repositoryAdd(array $addInfo): int
    {
        // TODO: Implement repositoryAdd() method.
    }

    /**
     * 单条数据查询
     *
     * @param \Closure $closure
     * @return array
     */
    public function repositoryFind(\Closure $closure): array
    {
        // TODO: Implement repositoryFind() method.
    }

    /**
     * 更新数据
     *
     * @param array $updateWhere 修改条件
     * @param array $updateInfo 修改信息
     * @return int 更新行数
     */
    public function repositoryUpdate(array $updateWhere, array $updateInfo): int
    {
        // TODO: Implement repositoryUpdate() method.
    }

    /**
     * 删除数据
     *
     * @param array $deleteWhere 删除条件
     * @return int 删除行数
     */
    public function repositoryDelete(array $deleteWhere): int
    {
        // TODO: Implement repositoryDelete() method.
    }
}
