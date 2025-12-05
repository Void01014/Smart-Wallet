const graph = document.getElementById('graph').getContext('2d');

new Chart(graph, {
    type: 'line',
    data:{
        labels: Array.from({ length: 31 }, (_, i) => i + 1),
        datasets: [{
            label:'Income',
            data: inc_amounts,
            backgroundColor: 'rgba(0, 180, 250, 0.45)',
            borderColor:'rgba(0, 150, 250, 0.9)',
            borderWidth:1,
            fill:true
        },
        {
            label:'expense',
            data: exp_amounts,
            backgroundColor: 'rgba(250, 0, 0, 0.45)',
            borderColor:'red',
            borderWidth:1,
            fill:true
        }]
    }
});

const rows = document.querySelectorAll('.rows');

rows.forEach(element => {
    element.insertAdjacentHTML('beforeend', `<button class = "bg-red-500 p-2 cursor-pointer delete">x</button>`);
});

document.querySelectorAll('.delete').forEach(element => {
    element.addEventListener('click', async(event) => {
        const row = element.closest('.rows');
        const id = row.id;
        const mode = row.dataset.mode;        

         try {
            const response = await fetch('delete_row.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${id}&mode=${mode}`
            });

            const result = await response.json();

            if(result.success){
                row.remove(); // remove row from page if DB deletion succeeded
            } else {
                alert('Failed to delete row.');
            }
            } catch (err) {
            console.error('Error deleting row:', err);
        }
    })
});