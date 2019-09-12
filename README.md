# APIadas

Uma API de piadas em Português de Portugal (nada contra Brasil).

## Instalação

Criar base de dados MySQL e fazer conexão no ficheiro connection.php

```
CREATE TABLE ahahQuePiada (
  ID varchar(5)  NOT NULL,
  piada_inicio text  NOT NULL,
  piada_fim text  NOT NULL,
  categoria varchar(15)  NOT NULL,
  tipo varchar(15) NOT NULL,
  activo tinyint(4) NOT NULL DEFAULT 1
);
```

## Uso
GET: https://apiadas.000webhostapp.com

## Contribuição
Podes submeter a tua piada [AQUI](https://apiadas.000webhostapp.com/contribuir) para ser considerada e consoante validação adicionada.


