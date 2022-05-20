#include<stdio.h>
#include<stdlib.h>
#include<stdbool.h>
#include<time.h>
#include<locale.h>
#include "fonctions.h"
#define _CRT_SECURE_NO_DEPRECATE

int main() {
	
	//FILE* fp;
	//fp = fopen("solveur.txt", "w");


	FILE* lire;
	lire = fopen("map.txt", "r");
	
	char c;

	// Calcul longueur 

	c = fgetc(lire);
	int l1 = (c-48) * 10;
	c = fgetc(lire);
	int l2 = (c - 48);
	int lon = l1 + l2;
	// printf("%d", lon);

	// Calcul largeur

	c = fgetc(lire);
	int o1 = (c - 48) * 10;
	c = fgetc(lire);
	int o2 = (c - 48);
	int lar = o1 + o2;

	//affichertab(test2, 8, 8);
	/*
	int test[7][7] = {  1,1,1,1,1,1,1,1,
						1,3,0,0,0,0,1,1,
						1,0,1,0,1,1,1,1,
						1,0,1,0,0,0,1,1,
						1,0,1,0,1,0,1,1,
						1,0,0,0,0,0,1,1,
						1,1,1,1,1,1,1,1,
						1,1,1,1,1,1,1,1 };

	int test3[8][8] = {  1,1,1,1,1,1,1,1,
						 1,0,1,0,1,1,1,1,
						 1,0,1,0,1,1,1,1,
						 1,0,1,0,1,1,1,1,
						 1,2,1,0,1,1,1,1,
						 1,0,1,1,1,1,1,1,
						 1,1,1,2,0,0,0,1,
						 1,1,1,1,1,1,1,1, };
	*/
	// printf("Longeur : %d", lon);
	int taille = 8;
	int compteur = 0;

	if (lon == 8) {
		int test2[8][8];
		for (int i = 0; i < lon; i++) {
			for (int j = 0; j < lar; j++) {
				c = fgetc(lire);
				int temp = c - 48;
				test2[i][j] = temp;
			}
		}
		solveurbrut(test2, 8, 8);
	}
	if (lon == 9) {
		int test2[9][9];
		for (int i = 0; i < 9; i++) {
			for (int j = 0; j < 9; j++) {
				c = fgetc(lire);
				int temp = c - 48;
				test2[i][j] = temp;
			}
		}
		solv9(test2, 9, 9);
	}
	if (lon == 10) {
		int test2[10][10];
		for (int i = 0; i < lon; i++) {
			for (int j = 0; j < lar; j++) {
				c = fgetc(lire);
				int temp = c - 48;
				test2[i][j] = temp;
			}
		}
		solv10(test2, 10, 10);
	}
	if (lon == 11) {
		int test2[11][11];
		for (int i = 0; i < lon; i++) {
			for (int j = 0; j < lar; j++) {
				c = fgetc(lire);
				int temp = c - 48;
				test2[i][j] = temp;
			}
		}
		solv11(test2, 11, 11);
	}
	if (lon == 12) {
		int test2[12][12];
		for (int i = 0; i < 12; i++) {
			for (int j = 0; j < 12; j++) {
				c = fgetc(lire);
				int temp = c - 48;
				test2[i][j] = temp;
			}
		}
		av12(test2, 12, 12);
	}
	if (lon == 13) {
		int test2[13][13];
		for (int i = 0; i < lon; i++) {
			for (int j = 0; j < lar; j++) {
				c = fgetc(lire);
				int temp = c - 48;
				test2[i][j] = temp;
			}
		}
		solv13(test2, 13, 13);
	}

	//printf("\n%d", );
	/*
	for (unsigned i = 0; i < 7; i++) {
		for (unsigned j = 0; j < 7; j++) {
			fprintf(fp, "%d |", test2[i][j]);
		}
		fprintf(fp, "\n");
	}
	*/
	//fprintf(fp, "%d", trouv);
	//fclose(fp);
}