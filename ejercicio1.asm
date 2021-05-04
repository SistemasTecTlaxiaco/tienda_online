.model small 
.stack 64
.data

;definir variables
a db 0
b db 0
c db 0
suma db 0
multi db 0
unidades db 0
centenas db 0
decenas db 0  


;definir mensajes
msja db 10,13, "a= ",'$'
msjb db 10,13, "b= ",'$' 
msjc db 10,13, "c= ",'$'
msjd db 10,13, "(a+b)*c= ",'$'

.code
begin proc far
    ;direccionamiento del procedimiento 
    mov ax, @data
    mov ds,ax 
    
    ;solicitar a
    mov ah,09
    lea dx,msja     
    int 21h     
    mov ah,01
    int 21h
    sub al,30h    
    mov a,al  
    
    ;solicitar b
    mov ah,09
    lea dx,msjb
    int 21h     
    mov ah,01
    int 21h
    sub al,30h 
    mov b,al   
    
    ;solicitar c
    mov ah,09
    lea dx,msjc
    int 21h     
    mov ah,01
    int 21h
    sub al,30h 
    mov c,al  
    
    ;suma
    mov al,a
    add al,b    
    mov suma,al
          
    ;multiplicacion
    mov al,suma
    aam
    mov dl,c
    mul dl       
    
    mov unidades,al
    aam
    
    mov centenas,ah
    
    mov decenas,al
    
    ;mostrar resultado
    mov ah,09
    lea dx,msjd
    int 21h     
    mov dl,centenas   
    add dl,30h 
    mov ah,02
    int 21h
    
    mov dl,decenas   
    add dl,30h 
    mov ah,02
    int 21h
    
    mov ah,4ch
    int 21h
    
    begin endp
end  