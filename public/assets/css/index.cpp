#include<stdio.h>
#include<stdlib.h>
#include<string.h>

struct node
{
    int val;
    node *left, *right;
    int height;
};

node *create(int val){
    node *temp = (node*)malloc(sizeof(node));
    temp->val = val;
    temp->left = NULL;
    temp->right = NULL;
    temp->height = NULL;

    return temp;
}

int max(int a, int b){
    if(a>b) return a;
    return b;
}

int height(node *root){
    if(root == NULL){
        return 0;
    }
    else{
        return root->height;
    }
}
int bf(node *root){
    if(root == NULL){
        return 0;
    }
    else{
        return height(root->left)-height(root->right);
    }
}
node *left(node *root){
    node *RightChild = root->right;
    node *rightChildLeft = RightChild->left;
    RightChild->left = root;
    root->right = rightChildLeft;

    root->height = max(height(root->left), height(root->right))+1;
    RightChild->height = max(height(RightChild->left), height(RightChild->right))+1;

    return RightChild;
}
node *right(node *root){
    node *leftChild = root->left;
    node *leftChildRight = leftChild->right;
    leftChild->right = root;
    root->left = leftChildRight;

    root->height = max(height(root->left), height(root->right))+1;
    leftChild->height = max(height(leftChild->left), height(leftChild->right))+1;

    return leftChild;
}
node *rebalance(node *root){
    int factor = bf(root);

    if(factor >1){
        if(bf(root->left) >=0){
            return right(root);
        }
        else{
            root->left = left(root->left);
            return right(root);
        }
    }

    if(factor < -1){
        if(bf(root->right) <= 0){
            return left(root);
        }
        else{
            root->right = right(root->right)
            return left(root);
        }
    }
    return root;
}
node *insert(node *root, int val){
    if(root == NULL){
        return create(val);
    }
    else if(val > root->val){
        root->right = insert(root->right,val);
    }
    else if(val < root->val){
        root->left = insert(root->left,val);
    }
    else{
        puts("DP");
    }

    root->height = max(height(root->left), height(root->right))+1;
    return rebalance(root);
}
node *predecesor(node *root){
    while(root->right){
        root = root->right;
    }
    return root;
}
node *pop(node *root, int val){
    if(root == NULL){
        return NULL;
    }
    else if(val > root->val){
        root->right = pop(root->right,val);
    }
    else if(val < root->val){
        root->left =
        pop(root->left,val);
    }
    else{
        if(root->left == NULL){
            node *temp = root->right;
            free(root);
            root = NULL;
            return temp;
        }
        else if(root->right == NULL){
            node *temp = root->left;
            free(root);
            root = NULL;
            return temp;
        }
        else{
            node *temp = predecesor(root->left);
            root->val = temp->val;
            root->left = pop(root->left, temp->val);
        }
    }
    root->height = max(height(root->left), height(root->right))+1;
    return rebalance(root);
}
void view(node *root){
    if(root){
        view(root->left)
        printf("%d\n", root->val);
        view(root->right);
    }
}
node *root = NULL;

int main(){
    int n;
    scanf("%d", n);
    root = insert(root, n);
    view(root);

    return 0;
}


