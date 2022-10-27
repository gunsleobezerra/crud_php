INSERT INTO `CLIENTES_CONTATOS`.`cliente` (
`cod_cliente`, 
`razao_social`, 
`nome_fantasia`, 
`endereco`, 
`complemento`, 
`bairro`, 
`cidade`, 
`estado`, 
`data_inclusao`
) VALUES (
0001, 
"Cliente 2", 
"Cliente Fantasia 2", 
"Rua dos limoes, 24, Piracicaba", 
"Complemento 2", 
"Bairro Verde", 
"Piracicaba", 
"SP", 
"2022-10-27 00:00:00");

INSERT INTO `clientes_contatos`.`contato`
(`cod_contato`,
`cod_cliente`,
`nome_contato`,
`telefone_1`,
`telefone_2`,
`celular`,
`email`
)VALUES(
1,
1,
"Pessoa 2",
"(19)999999999",
"(19)999999998",
"(19)999999997",
"pessoa@pessoa.com.br"
);

select count("cod_cliente"), cod_cliente as COUNT_Q from  cliente 
INNER JOIN contato
WHERE cliente.cod_cliente = contato.cod_cliente;



