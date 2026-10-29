-- 02_dados_exemplo.sql
-- Dados de teste para a loja. Rode DEPOIS do 01_criar_tabelas.sql.

-- Clientes
INSERT INTO cliente (nome, email, telefone, cidade) VALUES
('Ana Souza', 'ana.souza@email.com', '(11) 98765-4321', 'São Paulo'),
('Bruno Lima', 'bruno.lima@email.com', '(11) 97654-3210', 'Osasco'),
('Carla Mendes', 'carla.mendes@email.com', '(11) 96543-2109', 'Barueri'),
('Diego Santos', 'diego.santos@email.com', '(11) 95432-1098', 'Carapicuíba'),
('Eduarda Rocha', 'eduarda.rocha@email.com', '(11) 94321-0987', 'Santana de Parnaíba'),
('Fernanda Alves', 'fernanda.alves@email.com', '(11) 93210-9876', 'Cotia');

-- Produtos
INSERT INTO produto (nome, descricao, preco, imagem) VALUES
('Notebook 15 polegadas', '8 GB de memória, SSD de 256 GB e tela Full HD.', 3499.90, 'https://raw.githubusercontent.com/microsoft/fluentui-emoji/main/assets/Laptop/3D/laptop_3d.png'),
('Smartphone 128 GB', 'Tela de 6,5 polegadas e câmera dupla.', 1899.90, 'https://raw.githubusercontent.com/microsoft/fluentui-emoji/main/assets/Mobile%20phone/3D/mobile_phone_3d.png'),
('Fone de Ouvido Bluetooth', 'Até 20 horas de bateria e cancelamento de ruído.', 299.90, 'https://raw.githubusercontent.com/microsoft/fluentui-emoji/main/assets/Headphone/3D/headphone_3d.png');