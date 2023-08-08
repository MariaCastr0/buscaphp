async function carregar_produtos(valor){
    if(valor.length >= 3){
       const dados = await fetch('pesquisar_produtos.php?nome=' + valor);
    }
} 