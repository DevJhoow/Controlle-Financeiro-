document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById('graficoVendas').getContext('2d');

    const meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
    const vendas = [1200, 1500, 1800, 1300, 2000, 2500, 2200, 2700, 3000, 3100, 3300, 4000];
    const maisVendidos = [
        'Camiseta Branca', 'Calça Jeans', 'Tênis Esportivo', 'Jaqueta Preta',
        'Camiseta Branca', 'Tênis Esportivo', 'Tênis Esportivo', 'Boné Azul',
        'Tênis Esportivo', 'Jaqueta Preta', 'Tênis Esportivo', 'Tênis Esportivo'
    ];

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: meses,
            datasets: [{
                label: 'Vendas (R$)',
                data: vendas,
                backgroundColor: '#4e73df',
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: ctx => `R$ ${ctx.raw}`
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: value => `R$ ${value}`
                    }
                }
            }
        }
    });

    // Listar produtos mais vendidos
    const lista = document.getElementById('produtosMaisVendidos');
    lista.innerHTML = '';
    meses.forEach((mes, i) => {
        const item = document.createElement('li');
        item.classList.add('list-group-item');
        item.textContent = `${mes}: ${maisVendidos[i]}`;
        lista.appendChild(item);
    });
});
