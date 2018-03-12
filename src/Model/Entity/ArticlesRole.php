<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticlesRole Entity
 *
 * @property int $id
 * @property int $article_id
 * @property int $role_id
 *
 * @property \App\Model\Entity\Article $article
 * @property \App\Model\Entity\Role $role
 */
class ArticlesRole extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
