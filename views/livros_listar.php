<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Cadastrados</title>
</head>
<body>
    <h1>Livros Cadastrados</h1>

    <table border="1" cellpading="5">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= $livro['id']?></td>
                <td><?= htmlspecialchars($livro['titulo']) ?></td>
                <td><?= htmlspecialchars($livro['autor']) ?></td>
                <td>
                    <a href="index.php?acao=editar&id=<?= $livro['id'] ?>">Editar</a> | 
                    <a href="index.php?acao=deletar&id=<?= $livro['id'] ?>" onclick="return confirm('Você realmente deseja excluir esse livro?');">Excluir</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>


    <a href="index.php?acao=form">Adicionar Livro</a>
</body>
</html>