# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Project Development Tree
<pre>
var Projeto={
    Estrutura: {
        Aluno: {
            funcoes: [
                "Cadastrar",
                "Editar",
                "Remover"
            ],
            atributos: {
                nome: {
                    tipo: "text",
                    tamanho: "Padrão"
                },
                url: {
                    tipo: "text",
                    tamanho: "Padrão",
                    unique: true
                },
                matricula: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true,
                    unique: true
                },
                senha: {
                    tipo: "string",
                    tamanho: "64",
                    hash: "MD5"
                },
                id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    primary: true,
                    unsigned: true
                },
                status: {
                    tipo: "smallint",
                    tamanho: "Padrão",
                    unsigned: true,
                    possibilidades: {
                        1: "Aluno ativo",
                        2: "Aluno bloqueado"
                    }
                },
                data_bloqueio: {
                    tipo: "date",
                    isNull: true
                },
                maximo_de_livros: {
                    tipo: "int",
                    tamanho: "Padrão",
                    unsigned: true
                }
            }
        },
        Livro: {
            funcoes: [
                "Cadastrar",
                "Editar",
                "Remover"
            ],
            atributos: {
                nome: {
                    tipo: "text",
                    tamanho: "Padrão"
                },
                url: {
                    tipo: "text",
                    tamanho: "Padrão",
                    unique: true
                },
                id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    primary: true,
                    unsigned: true
                },
                status: {
                    tipo: "smallint",
                    tamanho: "Padrão",
                    unsigned: true,
                    possibilidades: {
                        1: "Livro ativo",
                        2: "Livro removido"
                    }
                },
                quantidade: {
                    tipo: "int",
                    tamanho: "Padrão",
                    unsigned: true
                }
            }
        },
        Emprestimo: {
            funcoes: [
                "Cadastrar",
                "Editar",
                "Remover"
            ],
            atributos: {
                id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true,
                    primary: true
                },
                livro_id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true
                },
                aluno_id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true
                },
                data_entrega: {
                    tipo: "date"
                }
            },
            referencias_externas: {
                aluno_id: {
                    tabela: "alunos",
                    campo: "id"
                },
                livro_id: {
                    tabela: "livros",
                    campo: "id"
                }
            }
        },
        Administrador: {
            funcoes: [
                "Cadastrar",
                "Editar",
                "Remover"
            ],
            atributos: {
                id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true,
                    primary: true
                },
                nome: {
                    tipo: "text",
                    tamanho: "Padrão"
                },
                senha: {
                    tipo: "string",
                    tamanho: 64,
                    hash: "MD5"
                },
                usuario: {
                    tipo: "string",
                    tamanho: 255
                }
            }
        },
        Notificacao: {
            funcao: [
                "Cadastrar"
            ],
            atributos:{
                id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true,
                    primary: true
                },
                notificacao: {
                    tipo: "text",
                    tamanho: "Padrão"
                },
                cor: {
                    tipo: "smallint",
                    tamanho: "Padrão",
                    unsigned: true,
                    possibilidades: {
                        1: "success",
                        2: "danger",
                        3: "warning",
                        4: "info"
                    }
                }
            }
        },
        NotificacaoLida: {
            atributos: {
                notificacao_id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true,
                    primary: true
                },
                administrador_id: {
                    tipo: "bigint",
                    tamanho: "Padrão",
                    unsigned: true,
                    primary: true
                }
            }
        }
    },
    Dependencias: {
        frameworks: {
            frontend: [
                "vuestrap",
                "vue",
                "vue-resource",
                "font-awesome",
                "pusher"
            ],
            backend: [
                "laravel"
            ]
        }
    }
};
</pre>
