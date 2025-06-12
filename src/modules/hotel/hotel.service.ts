import { Injectable } from '@nestjs/common';
import { PrismaService } from '../../prisma/prisma.service';
import { CreateHotelInput } from './dto/create-hotel.input';
import { UpdateHotelInput } from './dto/update-hotel.input';
import { Hotel } from '@prisma/client'; // <-- type from Prisma schema

@Injectable()
export class HotelService {
  constructor(private prisma: PrismaService) {}

  create(data: CreateHotelInput): Promise<Hotel> {
    return this.prisma.hotel.create({ data });
  }

  findAll(): Promise<Hotel[]> {
    return this.prisma.hotel.findMany();
  }

  findOne(id: number): Promise<Hotel | null> {
    return this.prisma.hotel.findUnique({ where: { id } });
  }

  update(id: number, data: UpdateHotelInput): Promise<Hotel> {
    return this.prisma.hotel.update({ where: { id }, data });
  }

  remove(id: number): Promise<boolean> {
    return this.prisma.hotel.delete({ where: { id } }).then(() => true);
  }
}
