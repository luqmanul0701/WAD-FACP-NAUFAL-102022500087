<!DOCTYPE html>
<html>
<body>
    <h2>Edit Armada</h2>
    <form action="/armada/{{ $armada->id }}" method="POST">
        @method('PUT')
        
        <label>Unit:</label><br>
        <input type="text" name="unit" value="{{ $armada->unit }}" required><br>
        
        <label>Nomor Polisi:</label><br>
        <input type="number" name="nopol" value="{{ $armada->nopol }}" required><br>
        
        <label>Merk:</label><br>
        <input type="text" name="merk" value="{{ $armada->merk }}" required><br>
        
        <label>Tahun:</label><br>
        <input type="number" name="tahun" value="{{ $armada->tahun }}" required><br>
        
        <label>Transmisi:</label><br>
        <input type="text" name="transmisi" value="{{ $armada->transmisi }}" required><br><br>
        
        <button type="submit">Update</button>
        <a href="/armada">Batal</a>
    </form>
</body>
</html>