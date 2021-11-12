<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VagasAlterada Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $acao
 * @property int|null $vaga_id
 *
 * @property \App\Model\Entity\Vaga $vaga
 */
class VagasAlterada extends Entity
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
        'nome' => true,
        'acao' => true,
        'vaga_id' => true,
        'vaga' => true,
    ];
}
