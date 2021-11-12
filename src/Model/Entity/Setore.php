<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Setore Entity
 *
 * @property int $id
 * @property string $nome_setor
 * @property int|null $departamento_id
 *
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Vaga[] $vagas
 */
class Setore extends Entity
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
        'nome_setor' => true,
        'departamento_id' => true,
        'departamento' => true,
        'vagas' => true,
    ];
}
