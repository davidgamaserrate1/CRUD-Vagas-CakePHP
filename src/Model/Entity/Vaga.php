<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vaga Entity
 *
 * @property int $id
 * @property string $nome_vaga
 * @property int|null $departamento_id
 * @property int|null $empresa_id
 * @property int|null $estabelecimentos_empresa_id
 * @property int|null $setore_id
 *
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\EstabelecimentosEmpresa $estabelecimentos_empresa
 * @property \App\Model\Entity\Setore $setore
 */
class Vaga extends Entity
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
        'nome_vaga' => true,
        'departamento_id' => true,
        'empresa_id' => true,
        'estabelecimentos_empresa_id' => true,
        'setore_id' => true,
        'departamento' => true,
        'empresa' => true,
        'estabelecimentos_empresa' => true,
        'setore' => true,
    ];
}
