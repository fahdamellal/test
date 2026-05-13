<?php


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulaire de Candidature de Stage</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <header class="hero">
    <h1>🎓 Formulaire de Candidature de Stage</h1>
  </header>

  <main class="page">
    <form class="form-card">

      <!-- IDENTITÉ -->
      <section class="form-section">
        <h2>Identité</h2>

        <div class="grid-2">
          <div class="form-group">
            <label for="nom">Nom <span>*</span></label>
            <input type="text" id="nom" name="nom" value="Jbara" required />
          </div>

          <div class="form-group">
            <label for="prenom">Prénom <span>*</span></label>
            <input type="text" id="prenom" name="prenom" value="Haitam" required />
          </div>
        </div>

        <div class="form-group">
          <label for="email">Adresse e-mail <span>*</span></label>
          <input type="email" id="email" name="email" value="haitam.jbara@uit.ac.ma" required />
        </div>
      </section>

      <!-- FORMATION -->
      <section class="form-section">
        <h2>Formation</h2>

        <div class="grid-2">
          <div class="form-group">
            <label for="filiere">Filière <span>*</span></label>
            <select id="filiere" name="filiere" required>
              <option>Génie Industriel</option>
              <option>Génie Informatique</option>
              <option>Génie Électrique</option>
              <option>Génie Mécanique</option>
              <option>Génie Civil</option>
            </select>
          </div>

          <div class="form-group">
            <label>Niveau d'études <span>*</span></label>

            <div class="radio-group">
              <label>
                <input type="radio" name="niveau" value="1ere" />
                1ère année
              </label>

              <label>
                <input type="radio" name="niveau" value="2eme" />
                2ème année
              </label>

              <label>
                <input type="radio" name="niveau" value="3eme" checked />
                3ème année
              </label>

              <label>
                <input type="radio" name="niveau" value="4eme" />
                4ème année
              </label>

              <label>
                <input type="radio" name="niveau" value="5eme" />
                5ème année
              </label>
            </div>
          </div>
        </div>
      </section>

      <!-- COMPÉTENCES -->
      <section class="form-section">
        <h2>Compétences techniques</h2>

        <div class="form-group">
          <label>Technologies maîtrisées <span>*</span></label>

          <div class="checkbox-group">
            <label>
              <input type="checkbox" name="tech[]" value="html-css" checked />
              HTML/CSS
            </label>

            <label>
              <input type="checkbox" name="tech[]" value="javascript" />
              JavaScript
            </label>

            <label>
              <input type="checkbox" name="tech[]" value="php" checked />
              PHP
            </label>

            <label>
              <input type="checkbox" name="tech[]" value="python" checked />
              Python
            </label>

            <label>
              <input type="checkbox" name="tech[]" value="java" />
              Java
            </label>

            <label>
              <input type="checkbox" name="tech[]" value="c-cpp" />
              C/C++
            </label>

            <label>
              <input type="checkbox" name="tech[]" value="react" />
              React
            </label>

            <label>
              <input type="checkbox" name="tech[]" value="laravel" checked />
              Laravel
            </label>
          </div>
        </div>
      </section>

      <!-- CV -->
      <section class="form-section">
        <h2>Curriculum Vitae</h2>

        <div class="form-group">
          <label for="cv">CV PDF uniquement <span>*</span></label>
          <input type="file" id="cv" name="cv" accept=".pdf" required />
          <p class="help-text">Format accepté : PDF · Taille maximale : 1 Mo</p>
        </div>
      </section>

      <button type="submit" class="submit-btn">
        Envoyer ma candidature →
      </button>

    </form>
  </main>

</body>
</html>



?>