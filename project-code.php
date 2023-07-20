#include<windows.h>
#include <GL/glut.h>

int posx = 0;
void init(void)
{
	glClearColor(1.0, 1.0, 1.0, 0.0);	// Set display window colour to white

	glMatrixMode(GL_PROJECTION);		// Set projection parameters
	gluOrtho2D(0.0, 85.0, 0.0, 82.0);

}

void line_drawing(float a, float b, float c, float d)
{
    // Draw an outlined triangle
	glBegin(GL_LINES);

		glVertex2f(a, b);
		glVertex2f(c, d);


	glEnd();
}

void quads(float a, float b, float c, float d, float e, float f, float g, float h){

    glBegin(GL_QUADS); //Begin quadrilateral coordinates

	//Trapezoid
	glVertex2f(a, b);
	glVertex2f(c,d);
	glVertex2f(e, f);
	glVertex2f(g, h);

	glEnd(); //End quadrilateral coordinates


}

void triangle(float a, float b, float c, float d, float e, float f){
   glBegin(GL_TRIANGLES);
   //Triangle
	glVertex2f(a, b);
	glVertex2f(c, d);
	glVertex2f(e, f);

	glEnd();//End triangle coordinates

}

void pentagon(int a, int b, int c, int d, int e, int f, int g, int h, int i, int j, int k, int l, int m, int n, int o, int p, int q, int r)
{
    glBegin(GL_TRIANGLES); //Begin triangle coordinates

	//Pentagon
	glVertex2i(a, b);
	glVertex2i(c, d);
	glVertex2i(e, f);

	glVertex2i(g, h);
	glVertex2i(i, j);
	glVertex2i(k, l);

	glVertex2i(m, n);
	glVertex2i(o, p);
	glVertex2i(q, r);

	glEnd();//End triangle coordinates
}



///river
void river()
{
    glColor3f(0.0352941176470588, 0.5098039215686275, 0.9568627450980392);
    glBegin(GL_POLYGON);

    glVertex3i(14, 0, 0);
    glVertex3i(12, 12, 0);
    glVertex3i(50, 12, 0);
    glVertex3i(49, 0, 0);


glEnd();



}
