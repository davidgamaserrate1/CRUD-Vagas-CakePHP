<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departamento Entity
 *
 * @property int $id
 * @property string $nome_departamento
 * @property int|null $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Setore[] $setores
 * @property \App\Model\Entity\Vaga[] $vagas
 */
class Departamento extends Entity
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
        'nome_departamento' => true,
        'empresa_id' => true,
        'empresa' => true,
        'setores' => true,
        'vagas' => true,
    ];
}
