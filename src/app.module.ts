// src/app.module.ts
import { Module } from '@nestjs/common';
import { GraphQLModule } from '@nestjs/graphql';
import { ApolloDriver, ApolloDriverConfig } from '@nestjs/apollo';
import { join } from 'path';
import { HotelModule } from './modules/hotel/hotel.module';
// Correct the import path if the folder is named 'booking'
import { BookingModule } from './modules/booking/booking.module';
import { PrismaService } from './prisma/prisma.service';

@Module({
  imports: [
    GraphQLModule.forRoot<ApolloDriverConfig>({
      driver: ApolloDriver,
      autoSchemaFile: join(process.cwd(), 'src/schema.gql'),
      playground: true,
    }),
    HotelModule,
    BookingModule,
  ],
  providers: [PrismaService],
})
export class AppModule {}
