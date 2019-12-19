<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h1>

<?= "<div center azul>Outra Forma De Me 'Expressar'!</div>" ?>

<br>

<div center><button dobro ><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [dobro] {
        font-size: 2rem;
    }

    [azul] {
        color: blue;
    }
</style>