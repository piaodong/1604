<?php 


int aa(int 5, int 9)
{
	if (x == 0 && y == 1) return 1;
	if (x == 1 && y == 0) return 1;
	if (x == 0) return function(x, y - 1);
	if (y == 0) return function(x - 1, y);
	else return function(x - 1, y) + function(x, y - 1);
}
int main()
{
	int x, y;
	int sum;
	while (cin >> x >> y)
	{
		sum = 0;
		sum += function(x, y);
		cout << sum << endl;
	}
	return 0;
}









/*动态规划：
     对于x*Y网格，dp[i][j]表示(i,j)位置一共有多少种走法,
     由于只能向左和向右走，所以第一列和第一行所有位置的走法都是1，即dp[i][0]=1,dp[0][j]=1(0=<i<=x,0<=j<=y)，
     对于其他位置，走法应该等于其左边格点的走法和其上面格点的走法之和，dp[i][j]=dp[i-1][j]+dp[i][j-1]，
     画个图比较容易理解。
*/   
#include<iostream>
#include<vector>
// using namespace std;
 


// function int index()
// {
// 	int x, y;
// 	cin >> x >> y;
// 	int dp[11][11];
// 	for (int j = 0; j <= y; j++)
// 		dp[0][j] = 1;
// 	for (int i = 0; i <= x; i++)
// 		dp[i][0] = 1;
// 	for (int i = 1; i <= x; i++)
// 	{
// 		for (int j = 1; j <= y; j++)
// 		  {
// 			 dp[i][j] = dp[i - 1][j] + dp[i][j-1];
// 		  }
// 	}
// 	cout << dp[x][y] << endl;
// }
// 
// 
//  class wanggezoufa {

// 	 static void main(String[] args) {
// 		System.out.println(method(17,16));//测试
		
 
// 	}
// 	static long a[][]=new long[1024][1024];//row,line
// 	public static long method(int row,int line) {	
// 		if(row==0||line==0){
// 			a[row][line]=1;
// 			return a[row][line];
// 		}else {
// 			if(a[row][line]==0) {
// 				a[row][line]=method(row-1,line)+method(row,line-1);
// 				return a[row][line];
// 			}else {
// 				return a[row][line];
// 			}	
// 		}	
// 	}
// }


?>