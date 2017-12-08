<?php
  $hierarquia = array(
    array(
      'nome_cargo'=>'CEO',
      'subordinados'=>array(
        //inicio diretor
        array(
          'nome_cargo'=>'Diretor Comercial',
          'subordinados'=>array(
            //Inicio: Gerente de vendas
            array(
              'nome_cargo'=>'Gerente de Vendas'
            )// Termino Gerente de Vendas
          )
        ),
        //Termino Diretor Comercial
        //Inicio: Diretor Financeiro
        array(
          'nome_cargo'=>'Diretor Financeiro',
          'subordinados'=>array(
            //Inicio: Gerente de Contas a pagar
            array(
              'nome_cargo'=>'Gerente de Contas a pagar',
              'subordinados'=>array(
                //inicio: Supervisor
                array(
                  'nome_cargo'=>'Supervisor de Pagamentos'
                )//Termino Supervisor
              )
            ),
            //Termino: Gerente de contas a pagar
            //Inicio:Gerente de Compras
            array(
              'nome_cargo'=>'Gerente de Compras',
              'subordinados'=>array(
                //inicio: Supervisor de Suprimentos
                array(
                  'nome_cargo'=>'Supervisor de Suprimentos'

                )//Termino Supervisor
              )
            )//Termino: diretor Financeiro

          )
          //Termino Diretor Financeiro
        )
      )
    )
  );

  function exibe($cargos){
    $html = '<ul>';

    foreach ($cargos as $cargo) {
      # code...
      $html .= '<li>';
      $html .= $cargo['nome_cargo'];

      if(isset($cargo['subordinados']) && count($cargo['subordinados'])>0){
        $html .= exibe($cargo['subordinados']);
      }
      $html .= '</li>';
    }

    $html .= "</ul>";

    return $html;
  }

  echo exibe($hierarquia);

 ?>
