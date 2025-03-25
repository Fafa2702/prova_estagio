window.onload = function () {
    fetch('api_emprestimo.php')
    .then(response => response.json())// converte os dados para json
        .then(item => {
            // string para armazenamento de dasos no html
            let ListaEmprestimo = '<ul>';
            item.forEach(emprestimo => {
                //abre lista
                ListaEmprestimo += `
                <li>
                    <h2>Empréstimo ${emprestimo.id}</h2>
                    <p><strong>Valor:</strong>R$ ${emprestimo.valor_emprestimo.toFixed(2)}</p>
                    <p><strong>Parcelas:</strong> ${emprestimo.numero_parcelas}</p>
                    <p><strong>Taxa de Juros:</strong> ${(emprestimo.taxa_juros * 100).toFixed(2)}%</p>
                    <p><strong>Valor por parcela:</strong> R$ ${emprestimo.valor_parcela.toFixed(2)}</p>
                    <p><strong>Total Pago:</strong> R$ ${emprestimo.total_pago.toFixed(2)}</p>
                    <p><strong>Total de Juros:</strong> R$ ${emprestimo.total_juros.toFixed(2)}</p>
                </li>
                `;
            });
            //fecha lista
            ListaEmprestimo += '</ul>';

            //incerção do codigo dentro do elemento com o id lista-emprestimos
            document.getElementById('lista_emprestimos').innerHTML = ListaEmprestimo;
        })
        .catch(error => console.error('erro ao buscar os emprestimos', error));
};
