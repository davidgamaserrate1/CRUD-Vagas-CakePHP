<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstabelecimentosEmpresa Entity
 *
 * @property int $id
 * @property string $empresa_nome
 * @property string $logradouro
 * @property int $numero
 * @property string $bairro
 *
 * @property \App\Model\Entity\Empresa[] $empresas
 * @property \App\Model\Entity\Vaga[] $vagas
 */
class EstabelecimentosEmpresa extends Entity
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
        'empresa_nome' => true,
        'logradouro' => true,
        'numero' => true,
        'bairro' => true,
        'empresas' => true,
        'vagas' => true,
    ];
}
