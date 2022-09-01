
    <?php
        // Primeiro exercicio de PHP

        #Cometário de linha também

        /*
            Comentário
                de
              Bloco
        */
        
        
        $nome = 'Rodrigo Milani'; //variável
        $i = 0;

        // WHILE
        echo "<b>WHILE</b><br><br>";
        while($i < 10){
            echo "$nome <br>";
            $i++;
        }

        echo "<br> <br>";

        //DO WHILE
        echo "<b>DO WHILE</b><br><br>";
        $i = 0;
        do{
            echo "$nome <br>";
            $i++;
        }while($i < 10);
        
        echo "<br> <br>"; 

        // IF
        echo "<b>IF</b><br><br>";
        if(5 > 10){
            echo "5 é maior que 10";
        }
        else{
            echo "5 não é maior que 10";
        }

        echo "<br> <br>";

        echo "<b>Switch</b><br><br>";

        $diaSemana = 3;
        switch($diaSemana){
            case 0:
                echo "Hoje é domingo";
                break;
            case 1:
                echo "Hoje é segunda-feira";
                break;
            case 2:
                echo "Hoje é terça-feira";
                break;
            case 3:
                echo "Hoje é quarta-feira";
                break;
            case 4:
                echo "Hoje é quinta-feira";
                break;
            case 5:
                echo "Hoje é sexta-feira";
                break;
            case 6:
                echo "Hoje é sábado";
                break;
            default:
                echo "O número inválido";
        }

        echo "<br> <br>";
        
        
        

        // echo "Olá mundo, meu nome é $nome!";

        // DOCUMENTAÇÃO DO PHP FICA EM: http://www.php.net
    
