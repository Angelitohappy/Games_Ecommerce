<div class="formulario">
  <form action="../classes/login.php" method="POST"> <!-- Adjust path as necessary -->
    <div class="mb-3">
      <label for="username" class="form-label">Nombre del usuario</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
  </form>
</div>