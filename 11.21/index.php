<?php 

 /*
 *  @param arr   数组
 *  @param len   数组长度
 *  @param value 查找元素
 *
 *  @return 返回查找元素的位置
 */
int searchItem(int arr[],int len, int value){
    int low = 0,high = len-1,mid;
    while (low <= high) {
        mid = (low + high)/2;
        if (value > arr[mid]) {
            low = mid+1;
        }else if (value < arr[mid]){
            high = mid - 1;
        }else{
            return mid;
        }
    }
    return -1;
}
 
int main(int argc, const char * argv[]) {
    //数组必须是有序数组
   int a[10] = {1,2,31,45,52,62,73,86,90,100};
    //查找86元素
    int l = searchItem(a,10,86);
    printf("loc = %d\n",l);
    return 0;
}


int insertItemLoc(int arr[],int len, int value){
    int low = 0,high = len-1,mid;
    while (low <= high) {
        mid = (low + high)/2;
        if (value > arr[mid]) {
            low = mid+1;
        }else if (value < arr[mid]){
            high = mid - 1;
        }else{
            return mid+1;
        }
    }
    return low;
}
