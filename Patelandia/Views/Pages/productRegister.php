<?php 

use Models\StockModel;

$stockModel = new StockModel(new MySql);
$data = null;
$itemId = $_GET['id'] ?? -1;

if ($itemId != -1) {
    foreach ($stockModel->menuModel->getMenu() as $key => $row) {
        if ($row['id'] == $itemId) {
            $data = $row;
        }
    }
}

if (isset($_POST['submit'])) {
    try {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $img = $_POST['img'];
        
        if ($itemId != -1) {
            $stockModel->updateItem(
                $name, $description, $price, 
                $quantity, intval($category), $img, $itemId
            );
            header('Location: ' . INCLUDE_PATH . "stock");
            die; 
        } 
        else {
            $stockModel->insertNewItem(
                $name, $description, $price, 
                $quantity, $category, $img
            );
        }
    } catch (Exception $e) {
        ?>

            <script>alert("Deu errado ):")</script>

        <?php

        echo $e -> getMessage();
    }
}

?>

<main>
    <h2 class="center mb-4 mt-4">Registro de produtos</h2>
    <hr class="center mb-4">

    <section class="register center">
        <form method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome do produto</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="name" 
                    name="name" 
                    value="<?php print $data['item_name'] ?? '' ?>"
                    placeholder="Produto" 
                    required
                >
            </div>
                        
            <div class="mb-3">
                <label for="price" class="form-label">Preço</label>
                <input 
                    class="form-control"
                    type="number" 
                    id="price" 
                    name="price" 
                    min="0.00" 
                    step="0.01" 
                    value="<?php print $data['price'] ?? '' ?>"
                    placeholder='Preço do produto (R$)' 
                    required
                >
            </div>
            
            <div class="mb-3">
                <label for="quantity" class="form-label">Estoque</label>
                <input 
                    class="form-control" 
                    type="number" 
                    id="quantity" 
                    name="quantity" 
                    value="<?php print $data['amount'] ?? '' ?>"
                    placeholder='quantidade no estoque' 
                    required
                >
            </div>
            
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <select class="form-select" id="category" name="category" aria-label="Default select example">
                    <option <?php echo $data['category'] ?? 'selected'?>>Categorias</option>
                    <option <?php echo ($data['category'] ?? '') == '0' ? 'selected' : '' ?> value="0">Salgado</option>
                    <option <?php echo ($data['category'] ?? '') == '1' ? 'selected' : '' ?> value="1">Bebida</option>
                    <option <?php echo ($data['category'] ?? '') == '2' ? 'selected' : '' ?> value="2">Combos</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrição do produto</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrição" required><?php print $data['description'] ?? '' ?>
                </textarea>
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Imagem (temporario)</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="img" 
                    name="img" 
                    value="<?php print $data['img_file_name'] ?? '' ?>"
                    placeholder="Produto" 
                    required
                >
            </div>

            <div class="mb-3 text-center">
                <input 
                    type="submit" 
                    name="submit" 
                    value="<?php print $itemId != -1 ? 'Atualizar Item' : 'Adicionar Item' ?>" 
                    class="btn btn-outline-danger center"
                >
            </div>
        </form>
    </section>
</main> 