<footer class="footer">
  <div class="container">
    <p class="mt-5 mb-3 text-muted lead">&copy; MInscrito - 2021</p>
  </div>
  <script src="\js\jquery-3.5.1.min.js"></script>
  <!--<script src="\js\alerta.js"></script>-->
  <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#alunos').DataTable({
          //quantidade de itens da tabela para exibição
          aLengthMenu: [5,10,25,50,100]
        }

        );
    } );
 </script>
</footer>