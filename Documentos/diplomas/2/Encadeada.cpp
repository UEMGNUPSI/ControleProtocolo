#include <stdio.h>
#include <locale.h>
#include "encadeada.h"

int main()
{
    Lista *alista=criaLista();
    int opc;
    int valor;
    setlocale(LC_ALL,"");
    while(opc != 0)
    {
        printf("\nMenu de opçõees");
        printf("\n1  - Inserir um valor");
        printf("\n2  - Buscar elemento");
        printf("\n3  - Remover um elemento específico");
        printf("\n4  - Destrói a lista");
        printf("\n5  - Inserir número de forma ordenada");
        printf("\n6  - Inserir número na última posição");
        printf("\n7  - Remover número na última posição");
        printf("\n8  - Verificar se a lista está vazia");
        printf("\n9  - Mostrar a lista");
        printf("\n0  - Sair do menu\n\n");
        printf("\nEscolha a opção desejada: ");
        scanf("%d",&opc);
        system("cls");
        if(opc != 0)
        {
            if(opc == 1)
            {
                printf("\nInsira um valor na lista: ");
                scanf("%d",&valor);
                alista = insereLista(alista, valor);
            }
            else if(opc == 2)
            {
                printf("\nQual elemento deseja buscar na lista: ");
                scanf("\n%d",&valor);
                Lista *v = busca(alista, valor);
                if(v != NULL)
                {
                    printf("\nelemento existe!");
                }
                else
                {
                    printf("\nelemento nao existe!");
                }
            }
            else if(opc == 3)
            {
                printf("\nQual elemento deseja remover: ");
                scanf("%d",&valor);
                alista = Remove(alista, valor);
            }
            else if(opc == 4)
            {
                liberaLista(alista);
                printf("\nLista destuida!");
                alista = criaLista();
            }
            else if(opc == 5)
            {
                printf("Qual numero deseja inserir de forma ordenada: ");
                scanf("%d",&valor);
                alista = insere_ordenado(alista, valor);
            }
            else if(opc == 6)
            {
                printf("Insera numero na ultima posicao: ");
                scanf("%d",&valor);
                alista = insere_final(alista, valor);
            }
            else if(opc== 7)
            {
                alista = Remove_final(alista);
            }
            else if(opc == 8)
            {
                if(ListaVazia(alista) == 1)
                {
                    printf("\nLista vazia");
                }
                else
                {
                    printf("\nLista nao vazia");
                }
            }
            else if(opc == 9)
            {
                imprimi(alista);
            }
        }
    }
    return 0;
}
