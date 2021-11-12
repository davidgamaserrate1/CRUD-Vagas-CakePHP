<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string|null $nome_empresa
 * @property int|null $estabelecimentos_empresa_id
 *
 * @property \App\Model\Entity\EstabelecimentosEmpresa $estabelecimentos_empresa
 * @property \App\Model\Entity\Departamento[] $departamentos
 * @property \App\Model\Entity\Vaga[] $vagas
 */
class Empresa extends Entity
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
        'nome_empresa' => true,
        'estabelecimentos_empresa_id' => true,
        'estabelecimentos_empresa' => true,
        'departamentos' => true,
        'vagas' => true,
    ];
}
