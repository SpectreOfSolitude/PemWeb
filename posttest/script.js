var counter = 2;
document.getElementById('TambahInput').addEventListener('click', function(){
    // membuat element input baru
    var newLabel = document.createElement('label');
    newLabel.setAttribute('for', 'nilai_matkul' + counter)
    newLabel.innerHTML = 'Nilai mata kuliah ' + " " + counter + ' : ';
    
    var newInput = document.createElement('input')
    newInput.type = 'text'
    newInput.name = 'nilai_matkul' + counter++;
    newInput.placeholder = 'Nilai mata kuliah' + " " +counter - 1;

    document.getElementById('kolom_input').appendChild(newLabel);
    document.getElementById('kolom_input').appendChild(newInput);
    document.getElementById('kolom_input').appendChild(document.createElement('br'));
})