function Mudarestado (encaminhamentoDoc, encaminhamentoColegiado, encaminhamentoProto){

          if (encaminhamentoDoc && document.getElementById('encaminhamentoDoc').style.display === 'block'){
            document.getElementById('encaminhamentoDoc').style.display = 'none';
            document.getElementById('encaminhamentoColegiado').style.display = 'none';
            document.getElementById('encaminhamentoProto').style.display = 'none';
          }else if (encaminhamentoDoc && document.getElementById('encaminhamentoDoc').style.display === 'none'){
            document.getElementById('encaminhamentoDoc').style.display = 'block';
            document.getElementById('encaminhamentoColegiado').style.display = 'none';
            document.getElementById('encaminhamentoProto').style.display = 'none';
          }

          if (encaminhamentoColegiado && document.getElementById('encaminhamentoColegiado').style.display === 'block'){
            document.getElementById('encaminhamentoDoc').style.display = 'none';
            document.getElementById('encaminhamentoColegiado').style.display = 'none';
            document.getElementById('encaminhamentoProto').style.display = 'none';
          }else if (encaminhamentoColegiado && document.getElementById('encaminhamentoColegiado').style.display === 'none'){
            document.getElementById('encaminhamentoDoc').style.display = 'none';
            document.getElementById('encaminhamentoColegiado').style.display = 'block';
            document.getElementById('encaminhamentoProto').style.display = 'none';
          }

          if (encaminhamentoProto && document.getElementById('encaminhamentoProto').style.display === 'block'){
            document.getElementById('encaminhamentoDoc').style.display = 'none';
            document.getElementById('encaminhamentoColegiado').style.display = 'none';
            document.getElementById('encaminhamentoProto').style.display = 'none';
          }else if (encaminhamentoProto && document.getElementById('encaminhamentoProto').style.display === 'none'){
            document.getElementById('encaminhamentoDoc').style.display = 'none';
            document.getElementById('encaminhamentoColegiado').style.display = 'none';
            document.getElementById('encaminhamentoProto').style.display = 'block';
          }
         
        }